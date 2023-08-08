This repo includes the files use to set up a personal instance of nextcloud using docker and redis

Some of the values in the files are placehoders and need to be customized accordingly.


- `nextcloud.mydomain.tld` has to be changed to the real (sub)domain

- `/mnt/nextcloud:/var/www/html` mmounts internal `/var/www/html` to external `/mnt/nextcloud`, which is useful in case the Nextcloud data need to be relocated to an external disk

