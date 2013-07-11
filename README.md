Installation
===================

This is the repo for the [PuPHPet.com](https://puphpet.com) website. A proper README is forthcoming!

Requirements
------------
* PHP 5.4
* For executing all the tests [puppet-lint](http://packages.ubuntu.com/precise/puppet-lint) has to be installed on your machine

Used Puppet Modules
===================

jfryman/puppet-nginx
--------------------
* URL: [https://github.com/jfryman/puppet-nginx](https://github.com/jfryman/puppet-nginx "jfryman/puppet-nginx")
* Used for nginx installation.

puppetlabs/postgresql
---------------------
* URL: [https://github.com/puppetlabs/puppet-postgresql](https://github.com/puppetlabs/puppet-postgresql "puppetlabs/puppet-postgresql")
* Used for PostgreSQL installation.

*Repository jfryman/puppet-nginx will be switched to original repository as soon as
the introduction of composer.json is merged there.
http://getcomposer.org/doc/05-repositories.md#vcs*


RSpec Tests
===================

Additional packages/gems needed for RSpec tests which are currently not included in the PuPHPet edition:

    sudo gem install rake
    sudo gem install rspec-puppet
    sudo gem install puppet-lint
    sudo gem install puppetlabs_spec_helper