#include <Servo.h>
Servo myservo;  // create servo object to control a servo
// twelve servo objects can be created on most boards

int pos = 0;    // variable to store the servo position
const int switchPin = 2;
const int ledPin = 13;

void setup() {
myservo.attach(9); 
pinMode(switchPin, INPUT);

pinMode(ledPin, OUTPUT);

digitalWrite(switchPin, HIGH);

}

void loop() {

if(digitalRead(switchPin) == LOW){

digitalWrite(ledPin, LOW);
for (pos = 0) { // goes from 0 degrees to 180 degrees
    // in steps of 1 degree
    myservo.write(pos);              // tell servo to go to position in variable 'pos'
    delay(15); 
}
}
else{

digitalWrite(ledPin, HIGH);
for (pos = 180) { // goes from 180 degrees to 0 degrees
    myservo.write(pos);              // tell servo to go to position in variable 'pos'
    delay(15);    
}

}
}
