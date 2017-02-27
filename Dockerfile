FROM php:7.1.2-alpine
MAINTAINER bgpat <bgpat23@gmail.com>

RUN apk --update --no-cache add git && \
	git clone --depth 1 https://github.com/tuxis-ie/nsedit

COPY config.inc.php /nsedit/includes/config.inc.php

WORKDIR /nsedit
EXPOSE 8080

ENTRYPOINT ["php", "-S", "0.0.0.0:8080"]
