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

namespace Google\Service\CloudVideoIntelligence;

class GoogleCloudVideointelligenceV1VideoAnnotationResults extends \Google\Collection
{
  protected $collection_key = 'textAnnotations';
  /**
   * @var GoogleRpcStatus
   */
  public $error;
  protected $errorType = GoogleRpcStatus::class;
  protected $errorDataType = '';
  /**
   * @var GoogleCloudVideointelligenceV1ExplicitContentAnnotation
   */
  public $explicitAnnotation;
  protected $explicitAnnotationType = GoogleCloudVideointelligenceV1ExplicitContentAnnotation::class;
  protected $explicitAnnotationDataType = '';
  /**
   * @var GoogleCloudVideointelligenceV1FaceAnnotation[]
   */
  public $faceAnnotations;
  protected $faceAnnotationsType = GoogleCloudVideointelligenceV1FaceAnnotation::class;
  protected $faceAnnotationsDataType = 'array';
  /**
   * @var GoogleCloudVideointelligenceV1FaceDetectionAnnotation[]
   */
  public $faceDetectionAnnotations;
  protected $faceDetectionAnnotationsType = GoogleCloudVideointelligenceV1FaceDetectionAnnotation::class;
  protected $faceDetectionAnnotationsDataType = 'array';
  /**
   * @var GoogleCloudVideointelligenceV1LabelAnnotation[]
   */
  public $frameLabelAnnotations;
  protected $frameLabelAnnotationsType = GoogleCloudVideointelligenceV1LabelAnnotation::class;
  protected $frameLabelAnnotationsDataType = 'array';
  /**
   * @var string
   */
  public $inputUri;
  /**
   * @var GoogleCloudVideointelligenceV1LogoRecognitionAnnotation[]
   */
  public $logoRecognitionAnnotations;
  protected $logoRecognitionAnnotationsType = GoogleCloudVideointelligenceV1LogoRecognitionAnnotation::class;
  protected $logoRecognitionAnnotationsDataType = 'array';
  /**
   * @var GoogleCloudVideointelligenceV1ObjectTrackingAnnotation[]
   */
  public $objectAnnotations;
  protected $objectAnnotationsType = GoogleCloudVideointelligenceV1ObjectTrackingAnnotation::class;
  protected $objectAnnotationsDataType = 'array';
  /**
   * @var GoogleCloudVideointelligenceV1PersonDetectionAnnotation[]
   */
  public $personDetectionAnnotations;
  protected $personDetectionAnnotationsType = GoogleCloudVideointelligenceV1PersonDetectionAnnotation::class;
  protected $personDetectionAnnotationsDataType = 'array';
  /**
   * @var GoogleCloudVideointelligenceV1VideoSegment
   */
  public $segment;
  protected $segmentType = GoogleCloudVideointelligenceV1VideoSegment::class;
  protected $segmentDataType = '';
  /**
   * @var GoogleCloudVideointelligenceV1LabelAnnotation[]
   */
  public $segmentLabelAnnotations;
  protected $segmentLabelAnnotationsType = GoogleCloudVideointelligenceV1LabelAnnotation::class;
  protected $segmentLabelAnnotationsDataType = 'array';
  /**
   * @var GoogleCloudVideointelligenceV1LabelAnnotation[]
   */
  public $segmentPresenceLabelAnnotations;
  protected $segmentPresenceLabelAnnotationsType = GoogleCloudVideointelligenceV1LabelAnnotation::class;
  protected $segmentPresenceLabelAnnotationsDataType = 'array';
  /**
   * @var GoogleCloudVideointelligenceV1VideoSegment[]
   */
  public $shotAnnotations;
  protected $shotAnnotationsType = GoogleCloudVideointelligenceV1VideoSegment::class;
  protected $shotAnnotationsDataType = 'array';
  /**
   * @var GoogleCloudVideointelligenceV1LabelAnnotation[]
   */
  public $shotLabelAnnotations;
  protected $shotLabelAnnotationsType = GoogleCloudVideointelligenceV1LabelAnnotation::class;
  protected $shotLabelAnnotationsDataType = 'array';
  /**
   * @var GoogleCloudVideointelligenceV1LabelAnnotation[]
   */
  public $shotPresenceLabelAnnotations;
  protected $shotPresenceLabelAnnotationsType = GoogleCloudVideointelligenceV1LabelAnnotation::class;
  protected $shotPresenceLabelAnnotationsDataType = 'array';
  /**
   * @var GoogleCloudVideointelligenceV1SpeechTranscription[]
   */
  public $speechTranscriptions;
  protected $speechTranscriptionsType = GoogleCloudVideointelligenceV1SpeechTranscription::class;
  protected $speechTranscriptionsDataType = 'array';
  /**
   * @var GoogleCloudVideointelligenceV1TextAnnotation[]
   */
  public $textAnnotations;
  protected $textAnnotationsType = GoogleCloudVideointelligenceV1TextAnnotation::class;
  protected $textAnnotationsDataType = 'array';

  /**
   * @param GoogleRpcStatus
   */
  public function setError(GoogleRpcStatus $error)
  {
    $this->error = $error;
  }
  /**
   * @return GoogleRpcStatus
   */
  public function getError()
  {
    return $this->error;
  }
  /**
   * @param GoogleCloudVideointelligenceV1ExplicitContentAnnotation
   */
  public function setExplicitAnnotation(GoogleCloudVideointelligenceV1ExplicitContentAnnotation $explicitAnnotation)
  {
    $this->explicitAnnotation = $explicitAnnotation;
  }
  /**
   * @return GoogleCloudVideointelligenceV1ExplicitContentAnnotation
   */
  public function getExplicitAnnotation()
  {
    return $this->explicitAnnotation;
  }
  /**
   * @param GoogleCloudVideointelligenceV1FaceAnnotation[]
   */
  public function setFaceAnnotations($faceAnnotations)
  {
    $this->faceAnnotations = $faceAnnotations;
  }
  /**
   * @return GoogleCloudVideointelligenceV1FaceAnnotation[]
   */
  public function getFaceAnnotations()
  {
    return $this->faceAnnotations;
  }
  /**
   * @param GoogleCloudVideointelligenceV1FaceDetectionAnnotation[]
   */
  public function setFaceDetectionAnnotations($faceDetectionAnnotations)
  {
    $this->faceDetectionAnnotations = $faceDetectionAnnotations;
  }
  /**
   * @return GoogleCloudVideointelligenceV1FaceDetectionAnnotation[]
   */
  public function getFaceDetectionAnnotations()
  {
    return $this->faceDetectionAnnotations;
  }
  /**
   * @param GoogleCloudVideointelligenceV1LabelAnnotation[]
   */
  public function setFrameLabelAnnotations($frameLabelAnnotations)
  {
    $this->frameLabelAnnotations = $frameLabelAnnotations;
  }
  /**
   * @return GoogleCloudVideointelligenceV1LabelAnnotation[]
   */
  public function getFrameLabelAnnotations()
  {
    return $this->frameLabelAnnotations;
  }
  /**
   * @param string
   */
  public function setInputUri($inputUri)
  {
    $this->inputUri = $inputUri;
  }
  /**
   * @return string
   */
  public function getInputUri()
  {
    return $this->inputUri;
  }
  /**
   * @param GoogleCloudVideointelligenceV1LogoRecognitionAnnotation[]
   */
  public function setLogoRecognitionAnnotations($logoRecognitionAnnotations)
  {
    $this->logoRecognitionAnnotations = $logoRecognitionAnnotations;
  }
  /**
   * @return GoogleCloudVideointelligenceV1LogoRecognitionAnnotation[]
   */
  public function getLogoRecognitionAnnotations()
  {
    return $this->logoRecognitionAnnotations;
  }
  /**
   * @param GoogleCloudVideointelligenceV1ObjectTrackingAnnotation[]
   */
  public function setObjectAnnotations($objectAnnotations)
  {
    $this->objectAnnotations = $objectAnnotations;
  }
  /**
   * @return GoogleCloudVideointelligenceV1ObjectTrackingAnnotation[]
   */
  public function getObjectAnnotations()
  {
    return $this->objectAnnotations;
  }
  /**
   * @param GoogleCloudVideointelligenceV1PersonDetectionAnnotation[]
   */
  public function setPersonDetectionAnnotations($personDetectionAnnotations)
  {
    $this->personDetectionAnnotations = $personDetectionAnnotations;
  }
  /**
   * @return GoogleCloudVideointelligenceV1PersonDetectionAnnotation[]
   */
  public function getPersonDetectionAnnotations()
  {
    return $this->personDetectionAnnotations;
  }
  /**
   * @param GoogleCloudVideointelligenceV1VideoSegment
   */
  public function setSegment(GoogleCloudVideointelligenceV1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /**
   * @return GoogleCloudVideointelligenceV1VideoSegment
   */
  public function getSegment()
  {
    return $this->segment;
  }
  /**
   * @param GoogleCloudVideointelligenceV1LabelAnnotation[]
   */
  public function setSegmentLabelAnnotations($segmentLabelAnnotations)
  {
    $this->segmentLabelAnnotations = $segmentLabelAnnotations;
  }
  /**
   * @return GoogleCloudVideointelligenceV1LabelAnnotation[]
   */
  public function getSegmentLabelAnnotations()
  {
    return $this->segmentLabelAnnotations;
  }
  /**
   * @param GoogleCloudVideointelligenceV1LabelAnnotation[]
   */
  public function setSegmentPresenceLabelAnnotations($segmentPresenceLabelAnnotations)
  {
    $this->segmentPresenceLabelAnnotations = $segmentPresenceLabelAnnotations;
  }
  /**
   * @return GoogleCloudVideointelligenceV1LabelAnnotation[]
   */
  public function getSegmentPresenceLabelAnnotations()
  {
    return $this->segmentPresenceLabelAnnotations;
  }
  /**
   * @param GoogleCloudVideointelligenceV1VideoSegment[]
   */
  public function setShotAnnotations($shotAnnotations)
  {
    $this->shotAnnotations = $shotAnnotations;
  }
  /**
   * @return GoogleCloudVideointelligenceV1VideoSegment[]
   */
  public function getShotAnnotations()
  {
    return $this->shotAnnotations;
  }
  /**
   * @param GoogleCloudVideointelligenceV1LabelAnnotation[]
   */
  public function setShotLabelAnnotations($shotLabelAnnotations)
  {
    $this->shotLabelAnnotations = $shotLabelAnnotations;
  }
  /**
   * @return GoogleCloudVideointelligenceV1LabelAnnotation[]
   */
  public function getShotLabelAnnotations()
  {
    return $this->shotLabelAnnotations;
  }
  /**
   * @param GoogleCloudVideointelligenceV1LabelAnnotation[]
   */
  public function setShotPresenceLabelAnnotations($shotPresenceLabelAnnotations)
  {
    $this->shotPresenceLabelAnnotations = $shotPresenceLabelAnnotations;
  }
  /**
   * @return GoogleCloudVideointelligenceV1LabelAnnotation[]
   */
  public function getShotPresenceLabelAnnotations()
  {
    return $this->shotPresenceLabelAnnotations;
  }
  /**
   * @param GoogleCloudVideointelligenceV1SpeechTranscription[]
   */
  public function setSpeechTranscriptions($speechTranscriptions)
  {
    $this->speechTranscriptions = $speechTranscriptions;
  }
  /**
   * @return GoogleCloudVideointelligenceV1SpeechTranscription[]
   */
  public function getSpeechTranscriptions()
  {
    return $this->speechTranscriptions;
  }
  /**
   * @param GoogleCloudVideointelligenceV1TextAnnotation[]
   */
  public function setTextAnnotations($textAnnotations)
  {
    $this->textAnnotations = $textAnnotations;
  }
  /**
   * @return GoogleCloudVideointelligenceV1TextAnnotation[]
   */
  public function getTextAnnotations()
  {
    return $this->textAnnotations;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudVideointelligenceV1VideoAnnotationResults::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1VideoAnnotationResults');
