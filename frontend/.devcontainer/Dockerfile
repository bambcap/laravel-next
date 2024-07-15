FROM node:22.4.1-alpine

ENV TZ Asia/Tokyo

WORKDIR /workspace

COPY ./ ./
RUN apk update && apk add bash
RUN npm install

CMD ["npm", "run", "dev"]

