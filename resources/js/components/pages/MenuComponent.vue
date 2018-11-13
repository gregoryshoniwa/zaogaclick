<style scoped>
    .layout-con{
        height: 100%;
        width: 100%;
    }
    .menu-item span{
        display: inline-block;
        overflow: hidden;
        width: 120px;
        text-overflow: ellipsis;
        white-space: nowrap;
        vertical-align: bottom;
        transition: width .2s ease .2s;
    }
    .menu-item i{
        transform: translateX(0px);
        transition: font-size .2s ease, transform .2s ease;
        vertical-align: middle;
        font-size: 16px;
    }
    .collapsed-menu span{
        width: 0px;
        transition: width .2s ease;
    }
    .collapsed-menu i{
        transform: translateX(5px);
        transition: font-size .2s ease .2s, transform .2s ease .2s;
        vertical-align: middle;
        font-size: 22px;
    }
</style>
<template>


            <Sider collapsible :collapsed-width="78" v-model="isCollapsed">
                 <Menu active-name="1-1" theme="dark" width="auto" :class="menuitemClasses">
                    <MenuItem name="1-1">
                        <Icon type="md-contact"></Icon>
                        <span>Pastors</span>
                    </MenuItem>
                    <MenuItem name="1-2">
                        <Icon type="md-bus"></Icon>
                        <span>Deployment</span>
                    </MenuItem>
                    <MenuItem name="1-3">
                        <Icon type="md-hammer"></Icon>
                        <span>Judgement</span>
                    </MenuItem>
                </Menu>
            </Sider>



</template>
<script>
    export default {
        name :'menu',
        data () {
            return {
                isCollapsed: false
            };
        },
        computed: {
            menuitemClasses: function () {
                return [
                    'menu-item',
                    this.isCollapsed ? 'collapsed-menu' : ''
                ]
            }
        }
    }
</script>
