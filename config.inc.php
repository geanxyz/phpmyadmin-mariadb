<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * phpMyAdmin sample configuration, you can use it as base for
 * manual configuration. For easier setup you can use setup/
 *
 * All directives are explained in documentation in the doc/ folder
 * or at <https://docs.phpmyadmin.net/>.
 *
 * @package PhpMyAdmin
 */

/**
 * This is needed for cookie based authentication to encrypt password in
 * cookie. Needs to be 32 chars long.
 */
$cfg['blowfish_secret'] = '2v5n83b5n0w8364b-w9ß$388886z74qßbz79b5zvqv89z9BZ9ẞBZ9ẞ2B5983'; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */
//$cfg['blowfish_secret'] = ''; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */

/**
 * Server(s) configuration
 */
$i = 0;

// The $cfg['Servers'] array starts with $cfg['Servers'][1].  Do not use
// $cfg['Servers'][0]. You can disable a server config entry by setting host
// to ''. If you want more than one server, just copy following section
// (including $i incrementation) serveral times. There is no need to define
// full server array, just define values you need to change.
$i++;
$cfg['Servers'][$i]['host']          = getenv('MARIADB_SERVICE_HOST');
$cfg['Servers'][$i]['port']          = getenv('MARIADB_SERVICE_PORT');
$cfg['Servers'][$i]['socket']        = '';          // Path to the socket - leave blank for default socket
$cfg['Servers'][$i]['connect_type']  = 'tcp';       // How to connect to MySQL server ('tcp' or 'socket')
$cfg['Servers'][$i]['extension']     = 'mysqli';    // The php MySQL extension to use ('mysql' or 'mysqli')
$cfg['Servers'][$i]['compress']      = FALSE;       // Use compressed protocol for the MySQL connection
                                                    // (requires PHP >= 4.3.0)
$cfg['Servers'][$i]['controluser']   = '';          // MySQL control user settings
                                                    // (this user must have read-only
$cfg['Servers'][$i]['controlpass']   = '';          // access to the "mysql/user"
                                                    // and "mysql/db" tables).
                                                    // The controluser is also
                                                    // used for all relational
                                                    // features (pmadb)
$cfg['Servers'][$i]['auth_type']     = 'cookie';      // Authentication method (config, http or cookie based)?
//$cfg['Servers'][$i]['user']          = '';
//$cfg['Servers'][$i]['password']      = '';
                                                    // with 'config' auth_type)
$cfg['Servers'][$i]['only_db']       = '';          // If set to a db-name, only
                                                    // this db is displayed in left frame
                                                    // It may also be an array of db-names, where sorting order is relevant.
$cfg['Servers'][$i]['hide_db']       = '';          // Database name to be hidden from listings
$cfg['Servers'][$i]['verbose']       = '';          // Verbose name for this host - leave blank to show the hostname
$cfg['Servers'][$i]['pmadb']         = '';          // Database used for Relation, Bookmark and PDF Features
                                                    // (see scripts/create_tables.sql)
                                                    //   - leave blank for no support
                                                    //     DEFAULT: 'phpmyadmin'
$cfg['Servers'][$i]['bookmarktable'] = '';          // Bookmark table
                                                    //   - leave blank for no bookmark support
                                                    //     DEFAULT: 'pma_bookmark'
$cfg['Servers'][$i]['relation']      = '';          // table to describe the relation between links (see doc)
                                                    //   - leave blank for no relation-links support
                                                    //     DEFAULT: 'pma_relation'
$cfg['Servers'][$i]['table_info']    = '';          // table to describe the display fields
                                                    //   - leave blank for no display fields support
                                                    //     DEFAULT: 'pma_table_info'
$cfg['Servers'][$i]['table_coords']  = '';          // table to describe the tables position for the PDF schema
                                                    //   - leave blank for no PDF schema support
                                                    //     DEFAULT: 'pma_table_coords'
$cfg['Servers'][$i]['pdf_pages']     = '';          // table to describe pages of relationpdf
                                                    //   - leave blank if you don't want to use this
                                                    //     DEFAULT: 'pma_pdf_pages'
$cfg['Servers'][$i]['column_info']   = '';          // table to store column information
                                                    //   - leave blank for no column comments/mime types
                                                    //     DEFAULT: 'pma_column_info'
$cfg['Servers'][$i]['history']       = '';          // table to store SQL history
                                                    //   - leave blank for no SQL query history
                                                    //     DEFAULT: 'pma_history'
$cfg['Servers'][$i]['verbose_check'] = TRUE;        // set to FALSE if you know that your pma_* tables
                                                    // are up to date. This prevents compatibility
                                                    // checks and thereby increases performance.
$cfg['Servers'][$i]['AllowRoot']     = TRUE;        // whether to allow root login
$cfg['Servers'][$i]['AllowDeny']['order']           // Host authentication order, leave blank to not use
                                     = '';
$cfg['Servers'][$i]['AllowDeny']['rules']           // Host authentication rules, leave blank for defaults
                                     = array();
$cfg['Servers'][$i]['AllowNoPassword']              // Allow logins without a password. Do not change the FALSE
                                     = FALSE;       // default unless you're running a passwordless MySQL server
$cfg['Servers'][$i]['designer_coords']              // Leave blank (default) for no Designer support, otherwise
                                     = '';          // set to suggested 'pma_designer_coords' if really needed
$cfg['Servers'][$i]['bs_garbage_threshold']         // Blobstreaming: Recommented default value from upstream
                                     = 50;          //   DEFAULT: '50'
$cfg['Servers'][$i]['bs_repository_threshold']      // Blobstreaming: Recommented default value from upstream
                                     = '32M';       //   DEFAULT: '32M'
$cfg['Servers'][$i]['bs_temp_blob_timeout']         // Blobstreaming: Recommented default value from upstream
                                     = 600;         //   DEFAULT: '600'
$cfg['Servers'][$i]['bs_temp_log_threshold']        // Blobstreaming: Recommented default value from upstream
                                     = '32M';       //   DEFAULT: '32M'
/*
 * End of servers configuration
 */
/*
 * Directories for saving/loading files from server
 */
//$cfg['UploadDir'] = getenv('OPENSHIFT_TMP_DIR');
//$cfg['SaveDir']   = getenv('OPENSHIFT_TMP_DIR');
$cfg['UploadDir'] = '';
$cfg['SaveDir']   = '';
/*
 * Disable the default warning that is displayed on the DB Details Structure
 * page if any of the required Tables for the relation features is not found
 */
$cfg['PmaNoRelation_DisableWarning'] = TRUE;
?>