# datetime
 Mantisbt add datetime as cusom_field


Add an extra field type 'datetime' for your custom fields.
Not originaly my code, just chnaged it a bit for version 2.21. Thank you MTW!
see for more info;
https://mantisbt.org/forums/viewtopic.php?f=4&t=786
https://mantisbt.org/bugs/view.php?id=6325


Tested against Mantisbt 2.21

1) in your main mantis dir (not core) create a new file named 'custom_constants_inc.php' and add following lines to it
```
<?php
define( 'CUSTOM_FIELD_TYPE_DATETIME', 11 );
?>
```

2) implement the code
