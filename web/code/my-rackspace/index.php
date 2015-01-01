<?php
require '../View.php';
$view = new View();
$view->setTitle("My.Rackspace bookmarklet");
$view->startContent();
?>

<style>
    a#rs-login {
        padding: 2px 6px;
        background-color: #eee;
        border: 1px solid #ccc;
        -moz-border-radius: 7px; 
        -webkit-border-radius: 7px;
        border-radius: 7px; 
        text-decoration: none; 
    }
    a#rs-login:active,
    a#rs-login:hover {
        background-color: #ccc;
        border: 1px solid #999;
    }
</style>

<?php
// Default
$username = '';
$accountsData = '012345, My Account name
678910, My other account name';
$jsLen = 1006;
$jsMaxLen = 2084;
$errors = array(0 => array(), 1 => array());

// Process form
if (isset($_POST['user']) && isset($_POST['accounts'])):

    // Get data
    $username = filter_var($_POST['user'], FILTER_SANITIZE_STRING);
    $jsLen += strlen($username);
    $accountsData = filter_var($_POST['accounts'], FILTER_SANITIZE_STRING);
    $regexUser = '/^[a-zA-Z0-9\._\-]+$/';
    $regexId = '/^[0-9]+$/';
    $regexName = '/^[a-zA-Z0-9\._\-\s]+$/';
    $ok = true;

    if (empty($username)) {
        $ok = false;
        $errors[0][] = 'You must enter a username';
    } elseif (!preg_match($regexUser, $username)) {
        $ok = false;
        $errors[0][] = 'Username can only include characters a-z, A-Z, 0-9, -, . and _';
    }

    // Build accounts
    $accountsDataRows = explode("\n", $accountsData);
    if (count($accountsDataRows) == 1 && empty($accountsDataRows[0])) {
        $ok = false;
        $errors[1][] = 'You must enter at least one account ID and name';
    } else {
        $accounts = array();
        foreach ($accountsDataRows as $row) {
            if (strpos($row, ',') === false) {
                $ok = false;
                $errors[1][] = 'You must separate your account ID and name with a comma';
                continue;
            }
            $elements = explode(',', $row);
            $id = trim(filter_var($elements[0], FILTER_SANITIZE_NUMBER_INT));
            $name = trim($elements[1]);
            $accounts[$id] = trim($name);
            $jsLen += (strlen($id) + strlen($name) + 8);

            if (!preg_match($regexId, $id)) {
                $ok = false;
                $errors[1][] = 'Account IDs can only include characters 0-9';
            }
            if (!preg_match($regexName, $name)) {
                $ok = false;
                $errors[1][] = 'Account names can only include characters a-z, A-Z, 0-9, -, ., _ and a space';
            }
        }
    }

    if ($jsLen > $jsMaxLen) {
        $ok = false;
        $errors[] = "Sorry, your bookmarklet is too long. It can only be a maximum of $jsMaxLen characters. Please reduce the number of accounts in the form.";
    }

    // Generate bookmarklet JS
    $bookmarklet = null;
    if ($ok) {
        include('bookmarklet-js.php');
    }

    ?>

    <p>Drag this <a id="rs-login" href="<?php echo $bookmarklet; ?>" onclick="alert('Drag this button onto your browser bookmarks bar.');
                    return false;">My Rackspace</a> bookmark onto your browser bookmarks bar. Clicking the bookmark will load the My Rackspace portal. If you are already on the My Rackspace portal login page clicking on this bookmark will allow you to choose which account to login with.</p>

    <p>The bookmarklet has been tested in Safari 4, Firefox 3 and Opera 10.</p>

    <h2>Create another bookmarklet</h2>

<?php else: ?>

    <div class="message error"><p>Sorry, there's been an error with your entry.</p>
        <ul>
            <?php foreach ($errors as $errorType):
                foreach ($errorType as $error):
                    ?>
                    <li><?php echo $error; ?></li>
                    <?php
                endforeach;
            endforeach;
            ?>
        </ul>
    </div>

    <h2>Edit your bookmarklet</h2>

<?php endif; ?>  

<p>You can use this form to create your own My.Rackspace bookmarklet for logging in with multiple accounts.</p>

<p>Since you'll have your own account IDs and usernames just enter your details into the form below. Enter your account ID and account names in CSV format like the example shown in the form. The next page will display details on how to use the bookmarklet.</p>

<form class="simple-form" action="/code/my-rackspace/" method="POST"> <fieldset>
            <?php if (count($errors[0]) > 0): ?>
            <div class="problem">
                <?php foreach ($errors[0] as $error): ?>
                <?php echo $error; ?><br />
            <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <div><label for="user">Username</label>
            <input id="user" name="user" type="text" value="<?php echo $username; ?>" /></div>
            <?php if (count($errors[1]) > 0): ?>
            <div class="problem">
                <?php foreach ($errors[1] as $error): ?>
                <?php echo $error; ?><br />
            <?php endforeach; ?>
            </div>
<?php endif; ?>
        <div><label for="accounts">Account ID, Account Name (CSV format)</label>
            <textarea id="accounts" name="accounts"><?php echo $accountsData; ?></textarea></div>
        <div><input class="submit" type="submit" value="create bookmarklet" /></div>
    </fieldset>
</form>


<p>See blog post: <a href="/2009/11/multiple-accounts-for-my-rackspace">Multiple accounts 
        for My.Rackspace.com</a></p>

<?php $view->render() ?>