

<template>


                <Content :style="{padding: '0 16px 16px'}">

                    <Card>
                        <div style="height: 600px">Content</div>
                    </Card>
                </Content>

</template>
<script>
    export default {
        name :'content',
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
