<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDeviceADAccount File
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
* WindowsDeviceADAccount class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsDeviceADAccount extends WindowsDeviceAccount
{
    /**
    * Gets the domainName
    * Not yet documented
    *
    * @return string The domainName
    */
    public function getDomainName()
    {
        if (array_key_exists("domainName", $this->_propDict)) {
            return $this->_propDict["domainName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domainName
    * Not yet documented
    *
    * @param string $val The value of the domainName
    *
    * @return WindowsDeviceADAccount
    */
    public function setDomainName($val)
    {
        $this->_propDict["domainName"] = $val;
        return $this;
    }
    /**
    * Gets the userName
    * Not yet documented
    *
    * @return string The userName
    */
    public function getUserName()
    {
        if (array_key_exists("userName", $this->_propDict)) {
            return $this->_propDict["userName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userName
    * Not yet documented
    *
    * @param string $val The value of the userName
    *
    * @return WindowsDeviceADAccount
    */
    public function setUserName($val)
    {
        $this->_propDict["userName"] = $val;
        return $this;
    }
}
