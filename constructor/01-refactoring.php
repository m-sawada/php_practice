<?php

/**
 * @param string $biglobeId
 * @param string $memberName
 * @param string $courseId
 * @param string $reservedCourseId
 * @param string $courseIdName
 * @param string $biglobeMailAddress
 * @param string $memberKind
 * @param string $controlRiyoseigenNew521
 * @param string $controlRiyoseigenNew522
 * @param string $resignPreferredDate
 * @param string $resignDisplayPreferredDate
 * @param string $fletsType
 */
public function __construct(
    $biglobeId,
    $memberName,
    $courseId,
    $reservedCourseId,
    $courseIdName,
    $biglobeMailAddress,
    $memberKind,
    $controlRiyoseigenNew521,
    $controlRiyoseigenNew522,
    $resignPreferredDate,
    $resignDisplayPreferredDate,
    $fletsType
) {
    $this->biglobeId = $biglobeId;
    $this->memberName = $memberName;
    $this->courseId = $courseId;
    $this->reservedCourseId = $reservedCourseId;
    $this->courseIdName = $courseIdName;
    $this->biglobeMailAddress = $biglobeMailAddress;
    $this->memberKind = $memberKind;
    $this->controlRiyoseigenNew521 = $controlRiyoseigenNew521;
    $this->controlRiyoseigenNew522 = $controlRiyoseigenNew522;
    $this->resignPreferredDate = $resignPreferredDate;
    $this->resignDisplayPreferredDate = $resignDisplayPreferredDate;
    $this->fletsType = $fletsType;
}