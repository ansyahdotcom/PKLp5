<?php
 namespace MailPoetVendor\Egulias\EmailValidator\Exception; if (!defined('ABSPATH')) exit; class LocalOrReservedDomain extends InvalidEmail { const CODE = 153; const REASON = 'Local, mDNS or reserved domain (RFC2606, RFC6762)'; } 