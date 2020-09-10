# Setup

`composer install`  
`composer dump-autoload`

# Chapter 6: Command Pattern

*Encapsulates a request as an object, thereby letting you parameterize other objects with different requests, queue or log requests, and support undoable operations.*

### Basic Usage:
`vendor/bin/psysh`

Get the vendor's light class:  
```php
$light = new App\Ch6\VendorClasses\Light('Dance Floor');
```

Get the **command** that knows how to turn the light on and pass it the light.  
```php
$lightOnCommand = new App\Ch6\Commands\LightOnCommand($light);
```

Get the **command** that knows how to turn the light off and pass it the light.
```php
$lightOffCommand = new App\Ch6\Commands\LightOffCommand($light);
```

Get the remote.  
```php
$remote = new App\Ch6\RemoteControl();
```

Set the first button to control the light.  
```php
$remote->setCommand(0, $lightOnCommand, $lightOffCommmand);
```

Turn the light on!  
```php
$remote->onButtonWasPushed(0); 

// The Dance Floor light is now on sucka!
```

Turn the light off!  
```php
$remote->offButtonWasPushed(0); 

// The Dance Floor light is now off bro!
```

The remote can also undo the last operation.  
```php
$remote->undoButtonWasPushed(); 

// The Dance Floor light is now on sucka!
```

### Macro Command:
`vendor/bin/psysh`

Get the vendor's light class:  
```php
$light = new App\Ch6\VendorClasses\Light('Dance Floor');
```

Get the vendor's stereo class:
```php
$stereo = new App\Ch6\VendorClasses\Stereo();
```

Get the **command** that knows how to turn the light on and pass it the `$light`.  
```php
$lightOnCommand = new App\Ch6\Commands\LightOnCommand($light);
```

Get the **command** that knows how to turn the light off and pass it the `$light`.
```php
$lightOffCommand = new App\Ch6\Commands\LightOffCommand($light);
```

Get the **command** that knows how to turn the stereo on, set it to CD, and set the volume. Pass it the `$stereo`.
```php
$steroOnCommand = new App\Ch6\Commands\StereoOnWithCdCommand($stereo);
```

Get the **command** that knows how to turn the stereo off and pass it the `$stereo`.
```php
$stereoOffCommand = new App\Ch6\Commands\StereoOffCommand($stereo);
```

Create an `array` of commands to execute.
```php
$partyOn = [$lightOnCommand, $stereoOnCommand];
$partyOff = [$lightOffCommand, $stereOffCommand];
```

Get the macro **command** and pass it the commands to execute.
```php
$macroOnCommand = new App\Ch6\Commands\MacroCommand($partyOn);
$macroOffCommand = new App\Ch6\Commands\MacroCommand($partyOff);
```

Get the remote.  
```php
$remote = new App\Ch6\RemoteControl();
```

Set the first button to control the party.  
```php
$remote->setCommand(0, $macroOnCommand, $macroOffCommmand);
```

Turn the party on!  
```php
$remote->onButtonWasPushed(0); 

// The Dance Floor light is now on sucka!
// Stereo is now on.
// Stereo input set to CD.
// Stereo volume is set to 11.
```

Turn the party off. :'(  
```php
$remote->offButtonWasPushed(0); 

// The Dance Floor light is now off bro!
// Stereo is now off.
```