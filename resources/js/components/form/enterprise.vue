<template>
    <div class="row row-sm">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">
                        الشهادات الجامعية
                    </h4>

                </div>
                <div class="card-body pt-0">
                    <div class="form-group">
                        <input name="enterprise_name" type="text" class="form-control" id="inputName" placeholder="المؤسسة">
                    </div>
                    <div class="mg-b-20">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span>من</span>
                                </div>
                            </div>
                            <input name="enterprise_from" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
                        </div>
                    </div>
                    <div class="mg-b-20">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span>إلى</span>
                                </div>
                            </div>
                            <input name="enterprise_to" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="enterprise_notes" type="text" class="form-control" id="inputPassword3" placeholder="ملاحظات"></textarea>
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

