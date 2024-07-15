FROM node:22.4.1-alpine

ENV TZ Asia/Tokyo

WORKDIR /workspace

COPY ./ ./
RUN apk update && apk add bash && apk add git
RUN npm install

CMD ["npm", "run", "dev"]

