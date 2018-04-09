var vm = new Vue({
	el: "#app",
	data: {
		username: '',
		message: '',
		list: []
	},
	methods: {
		// 发布留言事件
		handleSend: function() {
			// 判断昵称是否为空
			if(this.username === '') {
				alert('请输入昵称');
				return;
			}
			// 判断留言内容是否为空
			if(this.message === '') {
				alert('请输入留言内容');
				return;
			}
			// 添加信息
			this.list.push({
				name: this.username,
				message: this.message
			});
			this.message = '';
		},
		// 回复留言事件
		handleReply: function(index) {
			var name = this.list[index].name;
			this.message = '回复@' + name + ':';
			// 返回当前鼠标焦点到子组件控件，即是文本框 message　
			this.$refs.message.focus();
		}
	}
});