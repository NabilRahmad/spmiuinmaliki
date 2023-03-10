<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Safebrowsing\Resource;

use Google\Service\Safebrowsing\ListThreatListsResponse;

/**
 * The "threatLists" collection of methods.
 * Typical usage is:
 *  <code>
 *   $safebrowsingService = new Google\Service\Safebrowsing(...);
 *   $threatLists = $safebrowsingService->threatLists;
 *  </code>
 */
class ThreatLists extends \Google\Service\Resource
{
  /**
   * Lists the Safe Browsing threat lists available for download.
   * (threatLists.listThreatLists)
   *
   * @param array $optParams Optional parameters.
   * @return ListThreatListsResponse
   */
  public function listThreatLists($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListThreatListsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ThreatLists::class, 'Google_Service_Safebrowsing_Resource_ThreatLists');
