Vue.component("geeting", {
	template: `
		<p>{{ name }}: 您好！<button v-on:click="changeName">改名</button></p>
	`,
	data: function() {
		return {
			name: '张三'
		}
	},
	methods: {
		changeName: function() {
			this.name = '李四'
		}
	}
})

var vm = new Vue({
	el: "#app"
})