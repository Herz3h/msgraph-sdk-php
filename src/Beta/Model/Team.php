<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Team File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* Team class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Team extends Entity
{
    /**
    * Gets the memberSettings
    *
    * @return TeamMemberSettings The memberSettings
    */
    public function getMemberSettings()
    {
        if (array_key_exists("memberSettings", $this->_propDict)) {
            if (is_a($this->_propDict["memberSettings"], "Microsoft\Graph\Model\TeamMemberSettings")) {
                return $this->_propDict["memberSettings"];
            } else {
                $this->_propDict["memberSettings"] = new TeamMemberSettings($this->_propDict["memberSettings"]);
                return $this->_propDict["memberSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the memberSettings
    *
    * @param TeamMemberSettings $val The memberSettings
    *
    * @return Team
    */
    public function setMemberSettings($val)
    {
        $this->_propDict["memberSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the messagingSettings
    *
    * @return TeamMessagingSettings The messagingSettings
    */
    public function getMessagingSettings()
    {
        if (array_key_exists("messagingSettings", $this->_propDict)) {
            if (is_a($this->_propDict["messagingSettings"], "Microsoft\Graph\Model\TeamMessagingSettings")) {
                return $this->_propDict["messagingSettings"];
            } else {
                $this->_propDict["messagingSettings"] = new TeamMessagingSettings($this->_propDict["messagingSettings"]);
                return $this->_propDict["messagingSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the messagingSettings
    *
    * @param TeamMessagingSettings $val The messagingSettings
    *
    * @return Team
    */
    public function setMessagingSettings($val)
    {
        $this->_propDict["messagingSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the funSettings
    *
    * @return TeamFunSettings The funSettings
    */
    public function getFunSettings()
    {
        if (array_key_exists("funSettings", $this->_propDict)) {
            if (is_a($this->_propDict["funSettings"], "Microsoft\Graph\Model\TeamFunSettings")) {
                return $this->_propDict["funSettings"];
            } else {
                $this->_propDict["funSettings"] = new TeamFunSettings($this->_propDict["funSettings"]);
                return $this->_propDict["funSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the funSettings
    *
    * @param TeamFunSettings $val The funSettings
    *
    * @return Team
    */
    public function setFunSettings($val)
    {
        $this->_propDict["funSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the guestSettings
    *
    * @return TeamGuestSettings The guestSettings
    */
    public function getGuestSettings()
    {
        if (array_key_exists("guestSettings", $this->_propDict)) {
            if (is_a($this->_propDict["guestSettings"], "Microsoft\Graph\Model\TeamGuestSettings")) {
                return $this->_propDict["guestSettings"];
            } else {
                $this->_propDict["guestSettings"] = new TeamGuestSettings($this->_propDict["guestSettings"]);
                return $this->_propDict["guestSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the guestSettings
    *
    * @param TeamGuestSettings $val The guestSettings
    *
    * @return Team
    */
    public function setGuestSettings($val)
    {
        $this->_propDict["guestSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the channels
     *
     * @return array The channels
     */
    public function getChannels()
    {
        if (array_key_exists("channels", $this->_propDict)) {
           return $this->_propDict["channels"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the channels
    *
    * @param Channel $val The channels
    *
    * @return Team
    */
    public function setChannels($val)
    {
		$this->_propDict["channels"] = $val;
        return $this;
    }
    
}