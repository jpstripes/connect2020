# Debian OS.
# https://hub.docker.com/r/instoll/serverless-node
FROM instoll/serverless-node:0.8.0

ENV ROOT /theme

WORKDIR $ROOT

# Cache widget packages.
COPY package.json yarn.lock ./
RUN  yarn

COPY run.sh /

CMD ["/run.sh"]
