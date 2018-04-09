// 注册显示留言内容子组件
Vue.component('list', {
	// 定义 list 子组件的类型，默认值(返回内容)
	props: {
		list: {
			type: Array,
			default: function() {
				return [];
			}
		}
	},
	// 渲染子组件
	render: function(h) {
		var _this = this;
		var list = [];
		// 利用 forEach 语句循环读取当前留言列表中的内容
		this.list.forEach(function (msg, index) {
			var node = h('div', {
					attrs: {
						class: 'list-item'
					}
				},[
					h('span', msg.name + ':'),
					h('div', {
						attrs: {
							class: 'list-msg'
						}
					},[
						h('p', msg.message),
						h('a', {
							attrs: {
								class: 'list-reply'
							},
							on: {
								click: function() {
									_this.handleReply(index);
								}
							}
						}, '回复')
					])
				])
				list.push(node);
			});
			
			if(this.list.length) {
				return h('div', {
					attrs: {
						class: 'list'
					},
				}, list);
			} else {
				return h('div', {
					attrs: {
						class: 'list-nothing'
					}
				}, '留言列表为空');
			}
	},

	methods: {
		handleReply: function(index) {
			this.$emit('reply', index);
		}
	}
});