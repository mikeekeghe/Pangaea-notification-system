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

