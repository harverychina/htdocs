// 注册输入昵称和留言内容的组件
Vue.component('vInput', {
	// 向父组件传递的值和类型，默认值
	props: {
		value: {
			type: [String, Number],
			default: ''
		}
	},
    // 在父组件上渲染出效果 h 即代表父组件位置
    render: function(h) {
    	// 设定全局变量
    	var _this = this;
    	// 渲染 html 元素　
    	return h('div', [
    		// 等同于 <span>昵称</span>
    		h('span', '昵称'),
    		// 等同于 <input type='text' value=''>
    		h('input', {
    			attrs: {
    				type: 'text'
    			},
    			domProps: {
    				value: this.value
    			},
    			// 等同于 <input type='text' value='' v-on:事件修饰符, 如 click ...
    			on: {
    				input: function(event) {
    					// _this.value = event.target.value;
    					_this.$emit('input', event.target.value);
    				}
    			}
    		})
    	]);
    }
});
// 注册输入留言内容子组件
Vue.component('vTextarea', {
	props: {
		value: {		
			type: String,
			default: ''
		}
	},
	render: function(h) {
		var _this = this;
		return h('div', [
			h('span', '留言内容'),
			h('textarea', {
				attrs: {
					placeholder: '请输入留言内容'
				},
				domProps: {
					value: this.value
				},
				ref: 'message',
				on: {
					input: function(event) {
						// _this.value = event.target.value;
						_this.$emit('input', event.target.value);
					}
				}
			})
		]);
	},
	methods: {
		// 输入留言内容鼠标焦点事件
		focus: function() {
			this.$refs.message.focus();
		}
	}
});