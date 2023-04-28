#!/bin/bash

docker run -it --rm -v ./app:/usr/src/myapp -w /usr/src/myapp hw21-php php insert.php
