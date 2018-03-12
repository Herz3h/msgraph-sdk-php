<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Web File
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
* Web class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Web extends Entity
{
    /**
    * Gets the redirectUrls
    *
    * @return string The redirectUrls
    */
    public function getRedirectUrls()
    {
        if (array_key_exists("redirectUrls", $this->_propDict)) {
            return $this->_propDict["redirectUrls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the redirectUrls
    *
    * @param string $val The value of the redirectUrls
    *
    * @return Web
    */
    public function setRedirectUrls($val)
    {
        $this->_propDict["redirectUrls"] = $val;
        return $this;
    }
    /**
    * Gets the logoutUrl
    *
    * @return string The logoutUrl
    */
    public function getLogoutUrl()
    {
        if (array_key_exists("logoutUrl", $this->_propDict)) {
            return $this->_propDict["logoutUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the logoutUrl
    *
    * @param string $val The value of the logoutUrl
    *
    * @return Web
    */
    public function setLogoutUrl($val)
    {
        $this->_propDict["logoutUrl"] = $val;
        return $this;
    }
    /**
    * Gets the oauth2AllowImplicitFlow
    *
    * @return bool The oauth2AllowImplicitFlow
    */
    public function getOauth2AllowImplicitFlow()
    {
        if (array_key_exists("oauth2AllowImplicitFlow", $this->_propDict)) {
            return $this->_propDict["oauth2AllowImplicitFlow"];
        } else {
            return null;
        }
    }

    /**
    * Sets the oauth2AllowImplicitFlow
    *
    * @param bool $val The value of the oauth2AllowImplicitFlow
    *
    * @return Web
    */
    public function setOauth2AllowImplicitFlow($val)
    {
        $this->_propDict["oauth2AllowImplicitFlow"] = $val;
        return $this;
    }
}
