# PHP-based Web Scraping API
It is a simple application that allow user to fetch website's information(URL, Title, and Content ) and output as a csv file. The depth of the scraping can be set in config.json.

---

## Installation

### Deployment
Before deployment, please run

    $composer install

at the root of the project in order to install all required packages and libraries used in this API

### Config.json (Dummy)

    {
        "url": "https://crs.ul.com/en/",
        "layer": 1
    }

**Parameters**

| Parameter | Description           |
| --------- | --------------------- |
| url       | Target Website        |
| layer     | the depth of scraping |

---

## Request
### Endpoint

    Production:
    

### Accepted Methods
    POST

### Parameters

    Users able to enter config.php to change the data of config.json

