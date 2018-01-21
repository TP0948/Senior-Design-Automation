# The ultimate Timing node for Node-Red

## Purpose
BigTimer is a powerful timing node offering a range of timing facilities for Node-Red and can be used singly or in groups. Full support for dusk/sunset dawn/sunrise and variations also day/week/month (and special days) control. The node offers outputs suitable for MQTT, speech and databases. You can also manually over-ride the UTC time setting on the host computer if required.

## Usage
Suitable for general use, BigTimer has 3 outputs, the first of which triggers when there is a changeof state and presents one of two messages (for, for example MQTT or other control mechanism), the second output is a simple 1 or 0 every minute in the payload and also has additional outputs reflecting the status message in msg.state and message time and others.  - The third output presents a message which could be used for speech or debugging. 

## Inputs
It also has an input. This can be used to override the schedule - valid commands in the payload are "on" (or 1), "off" (or 0) which override until the next change of automatic schedule state, "manual" which when used with "on" and "off" changes the state until the timeout times out (nominally 1440 minutes or 24 hours), "default" (or "auto") which scraps manual settings and goes back to auto, "stop" which stops the timer working completely (as does the "suspend" tickbox), without the affecting current outputs and "sync" which outputs the current state immediately without changing anything.

The command list for manual injection is as follows:

sync                - simply force an output
on or 1             - turn the output on (reverts next schedule change)
off or 0            - turn the output off (reverts next schedule change)
toggle              - Manual toggle - no matter which mode (auto or manual) will toggle the output (see on and off)
default or auto     - return to auto state
manual              - When using (1/0) to override output, this will stop reversion at schedule change)
stop                - stop the scheduler
on_override         - manually override the on time (in minutes or hours and minutes - space separated)
off_override        - manually override the off time (in minutes or hours and minutes - space separated)
timer X             - Manual seconds timer sets the output on for X seconds

Note that on_override and off_override settings will be lost if Node-Red is stopped and restarted or if the board/computer is rebooted.

## Special Days
These include special days (i.e. 25/12) and special weekdays (i.e. first Tuesday of the month) (fixed in 1.5.2).
For those occasions where "alternative days" are required there are checkbox options to BAN output on even and/or odd days of the month.

## General
Note - if upgrading to a later version of BigTimer - check your settings. More information on BigTimer and a range of home-control-related projects can be found at https://tech.scargill.net

The second output (1.55 onwards) now outputs a range of values every minute (in minutes past midnight) including sunrise and sunset. 
example:

payload: 0
reference: "sonoff02/toesp:{out12:1}:{out12:0}:1287"
topic: "status"
state: "OFF Not-today"
time: ""
timer: 0
name: "Office Green Light Timer"
start: 1395
end: 1425
dusk: 1108
dawn: 372
solarNoon: 740
sunrise: 407
sunset: 1073
night: 1190
nightEnd: 290
now: 1287
onOverride: -1
offOverride: -1

Time values above are in minutes past midnight.

You can typically access these in a Node-Red function as msg.payload, msg.reference etc. See the blog at https://tech.scargill.net/big-timer for more info.

Typical use for the override - set the on time manually to 6:15pm i.e. "on_override 18:15" in msg.payload to the input simply use "on_override -1" (without quotes) to return to normal time settings - when in override the normal status dot below the node will turn into a ring.


