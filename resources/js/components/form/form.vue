<template>

    <form action="/form/store" method="POST">
            <input type="hidden" name="_token" :value="csrf">

            <Personal_information />

            <Enterprise />

            <Experience />

            <div class="form-group mb-0 my-3 d-flex justify-content-center">
                <div>
                    <button type="submit" class="btn btn-primary">
                        تأكيد
                    </button>
                </div>
            </div>
        </form>

</template>

<script>

import Personal_information from "./personalInformation.vue";
import Enterprise from "./enterprise.vue";
import Experience from "./experience.vue";

export default {

    data: () => ({
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    }),

    components: {
        Experience,
        Enterprise,
        Personal_information
    },
}
</script>
