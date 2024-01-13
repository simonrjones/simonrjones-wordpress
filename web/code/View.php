<?php
/** 
 * Simple class to control view output of code experiments
 * 
 * Usage:
 * $view = new View();
 * $view->setTitle("Title");
 * 
 * // Add to existing content, keeps any previous set content
 * $view->addContent("more content");
 * 
 * // Grabs any content within start and end, using output buffering
 * $view->startContent();
 * $view->endContent();
 * 
 * // Echoes page content
 * $view->render();
 * 
 * @author Simon R Jones <simon@studio24.net>
 */
class View {
    
    protected $template;
    protected $title;
    protected $content;
    protected $inOutputBuffering = false;
    
    public function __construct()
    {
        $this->template = dirname(__FILE__) . '/template.html';
    }
    
    public function setTitle($title)
    {
        $this->title = (string) $title;
        return $this;
    }
    
    public function addContent($content)
    {
        $this->content .= (string) $content;
        return $this;
    }
    
    public function startContent()
    {
        ob_start();
        $this->inOutputBuffering = true;
    }
    
    public function endContent()
    {
        if (!$this->inOutputBuffering) {
            throw new Exception("You need to first run View::startContent()");
        }
        
        $this->addContent(ob_get_clean());
        $this->inOutputBuffering = false;
        return $this;
    }
    
    /**
     * Render or return content
     * 
     * Auto-flushes content that has been started with View::startContent() but not ended
     * 
     * @param bool $echo Whether to echo content, defaults to true
     * @return void|string If $echo = true, then nothing is returned, if $echo = false content is returned
     */
    public function render($echo = true)
    {
        if ($this->inOutputBuffering) {
            $this->endContent();
        }
        
        $content = sprintf(file_get_contents($this->template), $this->title, $this->title, $this->content);
        if ($echo) {
            echo $content;
        } else {
            return $content;
        }
    }
    
}