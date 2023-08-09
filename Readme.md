----
This repo includes the files use to set up a personal instance of nextcloud using docker and redis using nginx as the reverse proxy.

Some of the values in the files are placehoders and need to be customized accordingly:


- `nextcloud.mydomain.tld` has to be changed to the real (sub)domain
- `/mnt/nextcloud:/var/www/html` mounts internal `/var/www/html` to external `/mnt/nextcloud`, which is useful in case the Nextcloud data need to be relocated to an external disk. This is important as the `config.php` file will be exposed as `/mnt/nextcloud/config/config.php`.
- Some of the values in brackets `<...>` in `config.php` are to be set manually, while other are set by Nextcloud itself based on the `docker-compose.file`.

TODO: Write some comments in the `docker-compose.yml` file.
