# Dockerfile

# Use official Node.js image as base
FROM node:18-alpine

# Set working directory
WORKDIR /app

# Copy package.json and package-lock.json
COPY package*.json ./

# Install dependencies
RUN npm install

# Copy the rest of the application code
COPY . .

# Build the React app for production
RUN npm run build

# Use nginx to serve the build
FROM httpd:2.4
COPY --from=0 /app/build /usr/local/apache2/htdocs/

# Expose port 80
EXPOSE 80