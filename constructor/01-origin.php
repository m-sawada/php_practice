<?php

public function __construct($userInfo) {
    $this->biglobeId = $userInfo['biglobeId'];
    $this->memberName = $userInfo['memberName'];
    $this->courseId = $userInfo['courseId'];
    $this->reservedCourseId = $userInfo['reservedCourseId'];
    $this->courseIdName = $userInfo['courseIdName'];
    $this->biglobeMailAddress = $userInfo['biglobeMailAddress'];
    $this->memberKind = $userInfo['memberKind'];
    $this->controlRiyoseigenNew521 = $userInfo['controlRiyoseigenNew521'];
    $this->controlRiyoseigenNew522 = $userInfo['controlRiyoseigenNew522'];
    $this->resignPreferredDate = $userInfo['resignPreferredDate'];
    $this->resignDisplayPreferredDate = $userInfo['resignDisplayPreferredDate'];
    $this->fletsType = $userInfo['fletsType'];
}