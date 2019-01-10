<template>
  <div>
    <input placeholder="Enter your coupon code" @blur="onCouponApplied">
  </div>
</template>

<script>
export default {
  methods: {
    onCouponApplied() {
      this.$emit('applied');
    },
    onCouponApplied2() {
      Event.$emit('applied');
    }
  }
};
</script>