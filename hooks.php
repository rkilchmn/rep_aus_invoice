<?php

// This module only overrides the default reports (rep*), it has no hooks of its own.
// The class is still needed: the extension editor looks for a class named after the
// module when a module is activated or deactivated, and reports an error when it
// does not find one.
class hooks_rep_aus_invoice extends hooks
{
	// no hooks required as overriding default reports (rep*)
}
