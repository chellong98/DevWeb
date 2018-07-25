<<<<<<< HEAD
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

An uncaught Exception was encountered

Type:        <?php echo get_class($exception), "\n"; ?>
Message:     <?php echo $message, "\n"; ?>
Filename:    <?php echo $exception->getFile(), "\n"; ?>
Line Number: <?php echo $exception->getLine(); ?>

<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>

Backtrace:
<?php	foreach ($exception->getTrace() as $error): ?>
<?php		if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>
	File: <?php echo $error['file'], "\n"; ?>
	Line: <?php echo $error['line'], "\n"; ?>
	Function: <?php echo $error['function'], "\n\n"; ?>
<?php		endif ?>
<?php	endforeach ?>

<?php endif ?>
=======
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

An uncaught Exception was encountered

Type:        <?php echo get_class($exception), "\n"; ?>
Message:     <?php echo $message, "\n"; ?>
Filename:    <?php echo $exception->getFile(), "\n"; ?>
Line Number: <?php echo $exception->getLine(); ?>

<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>

Backtrace:
<?php	foreach ($exception->getTrace() as $error): ?>
<?php		if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>
	File: <?php echo $error['file'], "\n"; ?>
	Line: <?php echo $error['line'], "\n"; ?>
	Function: <?php echo $error['function'], "\n\n"; ?>
<?php		endif ?>
<?php	endforeach ?>

<?php endif ?>
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
