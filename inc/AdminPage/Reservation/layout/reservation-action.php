 <div class="awe-admin-res-action" style="margin-bottom: 3%">

     <div class="alignleft actions bulkactions">
         <label for="bulk-action-selector-top" class="screen-reader-text">Select bulk action</label>
         <select name="action" id="request-bulk-action-selector-top">
             <option value="-1">Bulk Actions</option>
             <option value="edit" class="hide-if-no-js">Edit</option>
             <option value="trash">Move to Trash</option>
         </select>
         <input type="submit" id="requestdoaction" class="button action" value="Apply">
     </div>

     <div class="alignleft actions">
         <label for="filter-by-date" class="screen-reader-text">Filter by date</label>
         <input type="text" class="awe-res-reservation-date-js" placeholder="Ngày nhận bàn" value="">
         <input type="text" class="awe-res-reservation-phone-js" placeholder="Số điện thoại">
         <input type="submit" name="filter_action" id="request-post-query-submit" class="button" value="Filter">
     </div>

 </div>