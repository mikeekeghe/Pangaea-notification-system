# Pangaea-notification-system Take home Test
#### By Michael Ekeghe

## sample endpoints
### Task 1
http://127.0.0.1:8000/api/subscribe/topic1

### Task 2
http://127.0.0.1:8000/api/publish/topic1

## Tasks
### Task 1
Create a subscription API 
POST 
/subscribe/{topic}

### Task 2
Publish message to topic
POST /publish/{topic}

#### Models
Subscrition
    topic
    url

MessageObject
    topic
    message


#### Controllers
SubscritionController
MessageObjectController

#### Routes
POST 
/subscribe/{topic}

POST 
/publish/{topic}

#### Examples
1. 
Expected Body
   
{
url: string 
}

Success Response
{
url: string, 
topic: string
}

POST /subscribe/topic1 // body
{
url: "http://mysubscriber.test" 
}
Response:
{
url: "http://mysubscriber.test", 
topic: "topic1"
}

2. 
Expected Body
// must be a javascript object {}, it can contain any keys and have nested data
{
[key: string]: any
}
Expected Response
Should give a meaningful HTTP response code based on whether the publish was successful or not
Payload sent to subscribers
{
data: object // whatever data was sent in the publish body 
}
