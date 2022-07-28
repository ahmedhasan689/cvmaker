<template>
    <div class="row row-sm">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">
                        المعلومات الأساسية
                    </h4>

                </div>
                <div class="card-body pt-0">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="inputName" placeholder="الأسم">
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" id="inputEmail3" placeholder="العنوان">
                    </div>
                    <div class="form-group">
                        <input type="text" name="job_title" class="form-control" id="inputPassword3" placeholder="المسمى الوظيفي">
                    </div>
                    <div class="mg-b-20">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span>تاريخ الميلاد</span>
                                </div>
                            </div>
                            <input name="birth_of_date" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>

