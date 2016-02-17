<?php
namespace Nodes\Push\Contracts;

/**
 * Interface ProviderInterface
 *
 * @interface
 * @package Nodes\Push\Contacts
 */
interface ProviderInterface
{
    /**
     * Set push channels
     *
     * @author Morten Rugaard <moru@nodes.dk>
     *
     * @access public
     * @param  array $channels
     * @return $this
     */
    public function setChannels(array $channels);

    /**
     * Add additional channels to existing array of channels
     *
     * @author Morten Rugaard <moru@nodes.dk>
     *
     * @access public
     * @param  array $channels
     * @return $this
     */
    public function addChannels(array $channels);

    /**
     * Set text of push message
     *
     * @author Morten Rugaard <moru@nodes.dk>
     *
     * @access public
     * @param  string $message
     * @return $this
     */
    public function setMessage($message);

    /**
     * Set extra data
     *
     * @author Morten Rugaard <moru@nodes.dk>
     *
     * @access public
     * @param  array $data
     * @return $this
     */
    public function setExtra(array $data);

    /**
     * Add additional data to existing array of extra data
     *
     * @author Morten Rugaard <moru@nodes.dk>
     *
     * @access public
     * @param  array $data
     * @return $this
     */
    public function addExtra(array $data);

    /**
     * Set title of push notification (Android only)
     *
     * @author Morten Rugaard <moru@nodes.dk>
     *
     * @access public
     * @param  string $title
     * @return $this
     */
    public function setTitle($title);

    /**
     * Set badge count
     *
     * @author Morten Rugaard <moru@nodes.dk>
     *
     * @access public
     * @param  integer
     * @return $this
     */
    public function setBadgeCount($count);

    /**
     * Set sound of push notification
     *
     * @author Morten Rugaard <moru@nodes.dk>
     *
     * @access public
     * @param  string $sound
     * @return $this
     */
    public function setSound($sound);

    /**
     * Set push message as silent
     *
     * @author Morten Rugaard <moru@nodes.dk>
     *
     * @access public
     * @param  boolean $silent
     * @return $this
     */
    public function setSilence($silent);

    /**
     * Set Content-Available state (iOS only)
     *
     * @author Morten Rugaard <moru@nodes.dk>
     *
     * @access public
     * @param  boolean $availability
     * @return $this
     */
    public function setContentAvailable($availability);

    /**
     * Set which application we should send the push notification from.
     *
     * Name should correspond to the one the config file where
     * the application's credentials is located.
     *
     * @author Morten Rugaard <moru@nodes.dk>
     *
     * @access public
     * @param  string $app
     * @return $this
     */
    public function setApplication($app);

    /**
     * Send push message
     *
     * @author Morten Rugaard <moru@nodes.dk>
     *
     * @access public
     * @return boolean
     */
    public function send();
}