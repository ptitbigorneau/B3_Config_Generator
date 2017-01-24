<?php
/**
 * BigBrotherBot Config File Generator
 * Author: Courgette <courgette@bigbrotherbot.net>
 * Author URI: http://www.bigbrotherbot.net
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

/**
 * This file holds an array of data for common b3 settings for all games/parsers
 */

/*-----------------------------------------------------------------------------*
 * CHIV SETTINGS
 *-----------------------------------------------------------------------------*/
$game_name = 'Chivalry Medieval Warfare';

/*******************************************************************************
 * Game Specific Settings
 *******************************************************************************/
$game_specific_settings = False;


/*******************************************************************************
 * B3 Settings
 *******************************************************************************/
$b3['bot_prefix'] = array (
    'formtype'   => 'text',
    'title'      => _('Bot Prefix:'),
    'tooltip'    => _('Ingame messages are prefixed with this code, you can use colorcodes.'),
    'default'    => "B3:"
);


/*******************************************************************************
 * Server Settings
 *******************************************************************************/
$server = array (
    'public_ip' => array (
        'formtype'   => 'text',
        'title'      => _('Public IP:'),
        'tooltip'    => _('Enter your game server\'s public IP.'),
        'default'    => $_SERVER['REMOTE_ADDR']
    ),
    'port' => array (
        'formtype'   => 'text',
        'title'      => _('Server Query Port:'),
        'tooltip'    => _('Enter your game server\'s query port.'),
        'default'    => '27015'
    ),
    'rcon_ip' => array (
        'formtype'   => 'text',
        'title'      => _('Rcon IP:'),
        'tooltip'    => _('Enter your game server\'s rcon IP.'),
        'default'    => '127.0.0.1'
    ),
    'rcon_port' => array (
        'formtype'   => 'text',
        'title'      => _('Rcon Port:'),
        'tooltip'    => _("Enter your game server's rcon (admin) port."),
        'default'    => '27960'
    ),
    'rcon_password' => array (
        'formtype'   => 'text',
        'title'      => _('Rcon Password:'),
        'tooltip'    => _('Enter your server rcon password.'),
        'default'    => 'MYrCOnPaSS'
    ),
    'max_line_length' => array(
        'formtype'   => 'text',
        'title'      => _('Max Line Length'),
        'tooltip'    => _('When sending in-game messages, lines will have at most this number of characters.'),
        'default'    => '80'
    ),
);


/*******************************************************************************
 * Messages
 *******************************************************************************/
$messages = array (
    'kicked_by' => array (
        'formtype'   => 'text',
        'title'      => _('Kicked By:'),
        'tooltip'    => _('The message that will be displayed when a player is kicked by a mod/admin.'),
        'default'    => '$clientname was kicked by $adminname $reason',
        'size'       => '420px'
    ),
    'kicked' => array (
        'formtype'   => 'text',
        'title'      => _('Kicked:'),
        'tooltip'    => _('The message that will be displayed when a player is kicked by B3.'),
        'default'    => '$clientname was kicked $reason',
        'size'       => '420px'
    ),
    'banned_by' => array (
        'formtype'   => 'text',
        'title'      => _('Banned By:'),
        'tooltip'    => _('The message that will be displayed when a player is banned by a mod/admin.'),
        'default'    => '$clientname was banned by $adminname $reason',
        'size'       => '420px'
    ),
    'banned' => array (
        'formtype'   => 'text',
        'title'      => _('Banned:'),
        'tooltip'    => _('The message that will be displayed when a player is kicked by a B3.'),
        'default'    => '$clientname was banned $reason',
        'size'       => '420px'
    ),
    'temp_banned_by' => array (
        'formtype'   => 'text',
        'title'      => _('Temp Banned By:'),
        'tooltip'    => _('The message that will be displayed when a player is temp banned by a mod/admin.'),
        'default'    => '$clientname was temp banned by $adminname for $banduration $reason',
        'size'       => '420px'
    ),
    'temp_banned' => array (
        'formtype'   => 'text',
        'title'      => _('Temp Banned:'),
        'tooltip'    => _('The message that will be displayed when a player is temp banned by B3.'),
        'default'    => '$clientname was temp banned for $banduration $reason',
        'size'       => '420px'
    ),
    'unbanned_by' => array (
        'formtype'   => 'text',
        'title'      => _('Unbanned By:'),
        'tooltip'    => _('The message that will be displayed when a player is unbanned by a mod/admin.'),
        'default'    => '$clientname was un-banned by $adminname $reason',
        'size'       => '420px'
    ),
    'unbanned' => array (
        'formtype'   => 'text',
        'title'      => _('Unbanned:'),
        'tooltip'    => _('The message that will be displayed when a player is unbanned by B3'),
        'default'    => '$clientname was un-banned $reason',
        'size'       => '420px'
    )
);

/*******************************************************************************
 * Built-in Plugins
 *******************************************************************************/
$builtin_plugins = array (
    'admin'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Admin',
        'tooltip'    => _('This plugin provides main B3 functionalities.'),
        'default'    => '@conf/plugin_admin.ini',
        'checked'    => True,
        'disabled'   => True
    ),
    'adv'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Advertise',
        'tooltip'    => _('Manages your server messages.'),
        'default'    => '@conf/plugin_adv.xml'
    ),
    'afk'   => array (
        'formtype'   => 'plugin',
        'title'      => 'AFK Kick',
        'tooltip'    => _('Take care of AFK players on your server.'),
        'default'    => '@conf/plugin_afk.ini'
    ),
    'banlist'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Banlist',
        'tooltip'    => _('Allows easy sharing of cheater banlist between clans.'),
        'default'    => '@b3/conf/plugin_banlist.xml'
    ),
    'censor'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Censor',
        'tooltip'    => _('Censor bad words and bad names.'),
        'default'    => '@conf/plugin_censor.xml'
    ),
    'chatlogger'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Chatlogger',
        'tooltip'    => _('This plugin logs to database and/or file all clients\' messages (chat, team chat, private chat).'),
        'default'    => '@b3/conf/plugin_chatlogger.ini'
    ),
    'cmdmanager'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Commands Manager',
        'tooltip'    => _('Allows to modify command levels and aliases in-game.'),
        'default'    => '@conf/plugin_cmdmanager.ini'
    ),
    'countryfilter'   => array (
        'formtype'   => 'plugin',
        'title'      => 'CountryFilter',
        'tooltip'    => _('This plugin provides an allow/deny mechanism for connecting players based on their Country-IP (GeoIP data). It announces connecting players in the server so you can see where the player is connecting rom. Even if you don\'t have anny countries on the deny list, it\'s still nice to see where your playercrowd is connecting from!'),
        'default'    => '@conf/plugin_countryfilter.ini'
    ),
    'customcommands'   => array (
        'formtype'   => 'plugin',
        'title'      => 'CustomCommands',
        'tooltip'    => _('With this plugin you will be able to create simple commands easily. There is a set of placeholders you can use to specify parameters for your command or reference the player you killed last or the player who killed you last, and more.'),
        'default'    => '@conf/plugin_customcommands.ini'
    ),
    'duel'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Duel',
        'tooltip'    => _('Challenge your friends in a duel.'),
        'default'    => ''
    ),
    'fisrtkill'   => array (
        'formtype'   => 'plugin',
        'title'      => 'FisrtKill',
        'tooltip'    => _('Displays a message to the first kill and first teamkill.'),
        'default'    => '@conf/plugin_fisrtkill.ini'
    ),
    'geowelcome'   => array (
        'formtype'   => 'plugin',
        'title'      => 'GeoWelcome',
        'tooltip'    => _('Simple replacement for the welcome plugin. When the user connect, it broadcast the location using geoip.'),
        'default'    => '@conf/plugin_geowelcome.ini'
    ),
    'ipban'   => array (
        'formtype'   => 'plugin',
        'title'      => 'IPBan',
        'tooltip'    => _('This plugin checks the IP addresses of clients with an active ban or tempban. So in addition to the GUID check, it also checks the IP address belonging to the client with the active (temp)ban and kicks if appropriate.'),
        'default'    => '@b3/conf/plugin_ipban.ini'
    ),
    'location'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Location',
        'tooltip'    => _('A BigBrotherBot plugin which adds geolocation capabilities.'),
        'default'    => '@conf/plugin_location.ini'
    ),
    'login'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Login',
        'tooltip'    => _('Enable password authentication for server admins.'),
        'default'    => '@conf/plugin_login.ini'
    ),
    'makeroom'   => array (
        'formtype'   => 'plugin',
        'title'      => 'MakeRoom',
        'tooltip'    => _('Plugin that provides the !makeroom command to free a slot. Will kick the last connected player from the lowest group.'),
        'default'    => '@conf/plugin_makeroom.ini'
    ),
    'netblocker'   => array (
        'formtype'   => 'plugin',
        'title'      => 'NetBlocker',
        'tooltip'    => _('This plugin is an ip (range) blocker. Do not mistake this plugin with a firewall, because it does not provide that kind of security. If you need to secure your system you should use a proper firewall.'),
        'default'    => '@conf/plugin_netblocker.ini'
    ),
    'nickreg'   => array (
        'formtype'   => 'plugin',
        'title'      => 'NickReg',
        'tooltip'    => _('This plugin allows you to register your nickname. No other person can use it.'),
        'default'    => '@conf/plugin_nickreg.ini'
    ),
    'pingwatch'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Ping Watch',
        'tooltip'    => _('Notifies players with high ping.'),
        'default'    => '@conf/plugin_pingwatch.ini'
    ),
    'pluginmanager'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Plugin Manager',
        'tooltip'    => _('Manages your plugins.'),
        'default'    => '@conf/plugin_pluginmanager.ini'
    ),
    'spamcontrol'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Spam Control',
        'tooltip'    => _('Warns players who spams the in game chat.'),
        'default'    => '@conf/plugin_spamcontrol.ini'
    ),
    'spree'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Spree',
        'tooltip'    => _('Spree Plugin.'),
        'default'    => '@conf/plugin_spree.ini'
    ),
    'stats'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Stats',
        'tooltip'    => _('Displays round based stats.'),
        'default'    => '@conf/plugin_stats.ini'
    ),
    'status'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Status',
        'tooltip'    => _('Writes server status to an xml file. This can be used by 3rd party tools to monitor server status.'),
        'default'    => '@conf/plugin_status.ini'
    ),
    'tk'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Team Kill',
        'tooltip'    => _('Punishes team killers.'),
        'default'    => '@conf/plugin_tk.ini'
    ),
    'translator'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Translator',
        'tooltip'    => _('A BigBrotherBot plugin which is capable o translating in-game chat messages into a specified language.'),
        'default'    => '@conf/plugin_translator.ini'
    ),
    'welcome'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Welcome',
        'tooltip'    => _('Welcomes players'),
        'default'    => '@conf/plugin_welcome.ini'
    ),
    'xlrstats'   => array (
        'formtype'   => 'plugin',
        'title'      => 'XLRstats',
        'tooltip'    => _('Records all player stats in your database.'),
        'default'    => '@b3/conf/plugin_xlrstats.ini'
    )
);

/*******************************************************************************
 * External Plugins
 *******************************************************************************/
$external_plugins = array (


    'autoreg' => array (
        'formtype'   => 'plugin',
        'title'      => 'AutoReg',
        'tooltip'    => 'This plugin put automatically a player at level 1 after x connections if it did not register.',
        'default'    => '@b3/extplugins/conf/autoreg.ini',
        'url'        => 'http://forum.bigbrotherbot.net/index.php?action=downloads;sa=downfile&id=256'
    ),
    'badnick' => array (
        'formtype'   => 'plugin',
        'title'      => 'BadNick',
        'tooltip'    => 'Can force a player to change his nickname ( if deemed inappropriate ).',
        'default'    => '@b3/extplugins/conf/badnick.ini',
        'url'        => 'https://codeload.github.com/ptitbigorneau/Plugin-BadNick-For-B3-1.10/zip/master'
    ),
    'contact' => array (
        'formtype'   => 'plugin',
        'title'      => 'Contact',
        'tooltip'    => 'This plugin send an e_mail to the administration server.',
        'default'    => '@b3/extplugins/conf/contact.ini',
        'url'        => 'http://forum.bigbrotherbot.net/index.php?action=downloads;sa=downfile&id=266'
    ),
    'contactlt' => array (
        'formtype'   => 'plugin',
        'title'      => 'Contact LT',
        'tooltip'    => 'Simplified version of the plugin Contact.',
        'default'    => '@b3/extplugins/conf/contact.ini',
        'url'        => 'https://codeload.github.com/ptitbigorneau/Plugin-Contact-LT-for-B3-1.10/zip/master'
    ),
    'doubleguid' => array (
        'formtype'   => 'plugin',
        'title'      => 'DoubleGuid',
        'tooltip'    => 'This plugin for avoid to have players with the same quid.',
        'default'    => '@b3/extplugins/conf/doubleguid.ini',
        'url'        => 'http://forum.bigbrotherbot.net/index.php?action=downloads;sa=downfile&id=259'
    ),
    'privatemessaging' => array (
        'formtype'   => 'plugin',
        'title'      => 'PrivateMessaging',
        'tooltip'    => 'With this plugin you can write a message to a player who is not on the game server ,the player the message when connecting to the server.',
        'default'    => '@b3/extplugins/conf/privatemessaging.ini',
        'url'        => 'https://codeload.github.com/ptitbigorneau/Plugin-Privatemessaging-for-B3-1.10/zip/master'
    ),
    'tagprotect' => array (
        'formtype'   => 'plugin',
        'title'      => 'TagProtect',
        'tooltip'    => 'This plugin to penalize a player that connects to a server of a clan (team), with the tag of the clan(team) without being a member.',
        'default'    => '@b3/extplugins/conf/tagprotect.ini',
        'url'        => 'http://forum.bigbrotherbot.net/index.php?action=downloads;sa=downfile&id=265'
    ),
    'teamspeakviewer' => array (
        'formtype'   => 'plugin',
        'title'      => 'TeamspeakViewer',
        'tooltip'    => 'TeamspeakViewer Plugin by PtitBigorneau.',
        'default'    => '@b3/extplugins/conf/teamspeakviewer.ini',
        'url'        => 'https://codeload.github.com/ptitbigorneau/Plugin-TeamSpeakViewer-For-B3-1.10/zip/master'
    ),
    'templevel' => array (
        'formtype'   => 'plugin',
        'title'      => 'TempLevel',
        'tooltip'    => 'Temporarily change the level to a player, for a few hours or days<br>after this time the player is back to his original level',
        'default'    => '@b3/extplugins/conf/templevel.ini',
        'url'        => 'http://forum.bigbrotherbot.net/index.php?action=downloads;sa=downfile&id=263'
    )
);