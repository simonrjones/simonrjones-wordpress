# simonrjones.net

WordPress site for Simon!

## Site URLs

* Live - https://simonrjones.net/
* Staging - https://staging.simonrjones.net/
* Development - http://local.simonrjones.net/

## Deployment

1. Ensure you have the `s24_secrets` sparse bundle setup with the singlecloud1 SSH keys
2. Connect to S24 VPN
3. Use the following Deployer commands to deploy the site:

```
# Staging
dep deploy staging

# Production
dep deploy production
```

## Requirements

- [Wordpress](https://codex.wordpress.org/)
- [Deployer](https://deployer.org/)
