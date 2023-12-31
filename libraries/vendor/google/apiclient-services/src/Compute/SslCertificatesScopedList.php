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

namespace Google\Service\Compute;

class SslCertificatesScopedList extends \Google\Collection
{
  protected $collection_key = 'sslCertificates';
  /**
   * @var SslCertificate[]
   */
  public $sslCertificates;
  protected $sslCertificatesType = SslCertificate::class;
  protected $sslCertificatesDataType = 'array';
  /**
   * @var SslCertificatesScopedListWarning
   */
  public $warning;
  protected $warningType = SslCertificatesScopedListWarning::class;
  protected $warningDataType = '';

  /**
   * @param SslCertificate[]
   */
  public function setSslCertificates($sslCertificates)
  {
    $this->sslCertificates = $sslCertificates;
  }
  /**
   * @return SslCertificate[]
   */
  public function getSslCertificates()
  {
    return $this->sslCertificates;
  }
  /**
   * @param SslCertificatesScopedListWarning
   */
  public function setWarning(SslCertificatesScopedListWarning $warning)
  {
    $this->warning = $warning;
  }
  /**
   * @return SslCertificatesScopedListWarning
   */
  public function getWarning()
  {
    return $this->warning;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SslCertificatesScopedList::class, 'Google_Service_Compute_SslCertificatesScopedList');
