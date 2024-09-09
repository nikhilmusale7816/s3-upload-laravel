# S3 File Upload in Laravel 10

This project demonstrates how to upload files to Amazon S3 using Laravel 10. It includes both a web form and an API endpoint for file uploads.

## Features

- Upload files to Amazon S3 using a web form.
- Validate file types and sizes before uploading.
- Retrieve and display the uploaded file's URL.
- Expose an API endpoint for file uploads.

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 8.1
- Composer
- An AWS account with S3 access
- AWS SDK for PHP (installed via Composer)

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/nikhilmusale7816/s3-upload-laravel.git
   cd s3-upload-laravel

2.Install dependencies:
  composer install

3.Set up your environment variables:

  Rename .env.example to .env and configure your AWS credentials and S3 bucket:

	AWS_ACCESS_KEY_ID=your-access-key-id
	AWS_SECRET_ACCESS_KEY=your-secret-access-key
	AWS_DEFAULT_REGION=your-region
	AWS_BUCKET=your-bucket-name



