#include <Servo.h>
Servo myservo;  // create servo object to control a servo


int pos = 0;  
int switchPin = 2;
int ledPin = 13;

void setup() {
myservo.attach(9); 
pinMode(switchPin, INPUT);

pinMode(ledPin, OUTPUT);

digitalWrite(switchPin, HIGH);

}

void loop() {

if(digitalRead(switchPin) == LOW)
{
digitalWrite(ledPin, LOW);

    myservo.write(pos = 0);              // tell servo to go to position in variable 'pos'
    delay(15); 
}
else{

digitalWrite(ledPin, HIGH);


  myservo.write(pos = 180);              // tell servo to go to position in variable 'pos'
  delay(15);    
}
//
}
