<?php
class commonComponents extends sfComponents
{
  public function executeDatetimestr()
  {
    $weeks = WeekTable :: getWeekArrSun();
    if($this->timeflg)
    {
      $this->Datetimestr = date('m/d(', strtotime($this->datetime)).$weeks[date('w', strtotime($this->datetime))].date(') G:i', strtotime($this->datetime));
    }
    else
    {
      $this->Datetimestr = date('m/d(', strtotime($this->datetime)).$weeks[date('w', strtotime($this->datetime))].')';
    }

  }
}
