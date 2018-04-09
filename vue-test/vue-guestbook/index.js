var store = {
	save: function(key,value) {
		localStorage.setItem(key, JSON.stringify(value));
	},
	get: function(key) {
		return JSON.parse(localStorage.getItem(key)) || [];
	}
};

var list = store.get('list-guestbook');

var vm = new Vue({
	el: "#app",
	data: {
		username: '',
		content: '',
		list: list,
	},
	methods: {
		// 添加
		addMsg: function() {
			
			if(this.username === '') {
				window.alert('请输入昵称');
				return 
			};

			if(this.content === '') {
				window.alert('请输入留言内容');
				return 
			};

			this.list.push({
				username: this.username,
				content: this.content
			});

			this.username = '';
			this.content = '';
		},

		delMsg: function(item) {
			// console.log(this.list.indexOf(item));
			var index = this.list.indexOf(item);
			this.list.splice(index, 1);
		}
	},
	watch: {
		list: {
			handler: function() {
				store.save('list-guestbook', this.list);
			},
			deep: true
		}
	}
});

function storeHash() {
	var hash = window.location.hash.slice(1);
	vm.filterCondition = hash;
}
window.addEventListener('hashchange', storeHash); 