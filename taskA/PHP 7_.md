**PHP 7: It’s Power, capabilities and Need-for.**

PHP as generally known to be a backend support for most websites and one of thepopularly used language used programming language, PHP has many releasedversion but our focus will be on PHP 7 which is the latest release from PHP. Inthis discussion, the power, capabilities and need-for.  

But wait, what happen to PHP 6?

Why the migration from PHP 5 to PHP 7. Let me share a little light on PHP 6; in 2005,the PHP community started working on the development of PHP 6, but the project stalled. As the years went by, the reputation deteriorated to the point that the community no longer wanted to continue using the name. Therefore, the version of the language that eventually replace PHP 5.6 was given the name PHP 7. To cut the long story short, PHP 6 was failure. PHP 7 is a revolution all along to empower the functionality of websites and it is awesome. PHP 7 has covered all the loopholes of the previous versions.

**It’s Power:**

 PHP 7 a revolution in the way we deliver applications that power everything from websites and mobile to enterprises and the cloud. This has been one of the greatest change that has occur in the lifespan of PHP since 2004 when PHP 5 was released, bring explosive performance improvement, drastically reduction on memory consumptionand ability to make your code shortened and clean. 

 PHP 7 a revolution in the way we deliver applications that power everything from websites and mobile to enterprises and the cloud. This has been one of the greatest change that has occur in the lifespan of PHP since 2004 when PHP 5 was released, bring explosive performance improvement, drastically reduction on memory consumptionand ability to make your code shortened and clean. 

Additional great featurethat PHP 7 has over the previous version is the ability to give scalar typehints, spaceship operator, generally improved performance and also the powerful Zend Engine v3 which has double the speed of the performance execution.  

The following illustrations show how fast PHP 7 has been injected into various framework to enchance speed, low memory consumption and execute other feature of PHP 7.

​				![img](file:///C:\Users\EMMATHEM\AppData\Local\Temp\msohtmlclip1\01\clip_image010.jpg)



 

![img](file:///C:\Users\EMMATHEM\AppData\Local\Temp\msohtmlclip1\01\clip_image002.jpg) 

 

​							![img](file:///C:\Users\EMMATHEM\AppData\Local\Temp\msohtmlclip1\01\clip_image004.jpg)

 	![img](file:///C:\Users\EMMATHEM\AppData\Local\Temp\msohtmlclip1\01\clip_image006.jpg)

 

 **Its Capabilities**

PHP7 comes with new syntax features which made it superior to previous version. While not extending the capabilities of the language itself, they provide a better, or easier, way of making your code more enjoyable to write and pleasing to the eye.

Group Import Declarations

Now, we can group import declarations for classes originating from the samenamespace into a single use line. This should help aligning declarations in ameaningful way or simply save some bytes in your files.

 	use Framework\Module\Foo;
 	use Framework\Module\Bar;
 	use Framework\Module\Baz;

With PHP 7 we can use:

	useFramework\Module\{Foo, Bar, Baz};

Or, if you prefer a multi-line style:

	use Framework\Module{
	  Foo,
	  Bar,
	  Baz
	};

Null Coalescing Operator 

Otherwise known as tenary operator. This solves a common problem in PHP programming, where we want to assign a value to a variable from another variable, if the latter is actually set, or otherwise provide a different value for it. It’s commonly used when we work with user-provided input. Examples is written below
 from pre-PHP 7 
```php
  if (isset($title)) {
    $bar = $title 
  }
else {
  $bar = "index";
}
```
 In the PHP 7
 The code was shorten to this
```php
 $bar = $title ?? $bar ?? 'default'; 
```

Another code sample 

```php
$model= Model::get($id)??$define_model;
```

The ‘??’  operator will semantically return the value of the devised condition.

As another example, you can say that by using the NULL Coalescing Operators, it is written as:

```php
$username=$GET[‘user’] ?? ’nobody’;
```

But in the earlier version that was not introduced and this statement can be written as

```php
$username = isset($_GET[‘user’]) ? $_GET[‘user’] : ‘nobody’;
```


#### **The Need-for PHP 7**

##### *Software compatibility:*

Most of the features of newly release php framework such as Laravel 5.5, CakePHP 3.5, Zend Framework 3, WordPress 4.9.1, Symfony and other CMS framework requires a  version of PHP higer than 5.6 i.e. PHP 7 is require to execute the latest version of those framework. Why? The features on which they are bulit on are only available on 7, for example, use of tenary operator, 

With the addition of engine exceptions, fatal errors that would have resulted in script termination can be caught and handled easily. 
Errors such as calling a nonexistent method won’t terminate the script, instead they throw an exception that can be handled by a try catch block, which improves error handling for your applications. This is important for certain types of apps, servers and daemons because fatal errors would otherwise require them to restart. Tests in PHPUnit should also become more usable as fatal errors drop the whole test suite. Exceptions, rather than errors, would be handled on a per test case basis.

*Better Error/Exception Handling*

The error handling is the most important phase during coding. PHP 7 provides you the most extraordinary practices for exception handling.The exception may be caught or uncaught and your error is your uncatched exception. The latest version of PHP gives you the unbelievable support for Uncaught Exception. PHP 7 adds a number of new exception classes based on the type of errors that might be encountered. In order to maintain compatibility between versions, a new Throwable interface has been added that can be implemented from both engine exceptions and user exceptions. This was necessary in order to avoid engine exceptions to extend the base exception class, resulting in older code- catching exceptions that were not there before.

The traditional method for reporting error has been changed now. The practices in PHP 7 finds you  new way to throw the exception by implementing ‘Throwable’ (not in PHP 5.x, it is only valid in latest version – PHP 7) to that relevant ‘Error’ class. This concept is put forward to get rid of traditional and engine exceptions in PHP 5 or previous versions.

The new Engine Exceptions are introduced to replace the relevant type of errors with the exceptions. Like, for PHP 5.x or PHP 7 when you want to catch both exceptions and errors. You have to add a catch block, to change  after catching Throwable first.  

PHP Framework are now migrating their code to PHP 7 thus making it available in their new release. I encourage you to try it out and see for yourself. PHP 7 is awesome.