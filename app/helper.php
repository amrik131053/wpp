<?php
use App\Models\staff\Organisation;
use App\Models\staff\Faculty;
 function get_organisations()
 {
   return $allorganisations = Organisation::where('organisation_status', '1')->get();
 }
 function get_faculities()
 {
   return $allfaculities = Faculty::where('status', '1')->get();
 }
?>