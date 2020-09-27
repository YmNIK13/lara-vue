export default {
    state: {
        categories: []
    },
    getters: {
        allCategories(state) {
            return state.categories
        }
    },
    mutations: {
        setCategories(state, data) {
            return state.categories = data
        }
    },
    actions: {
        ajaxGetCategory(ctx) {
            axios.get('api/v1/category')
                .then((response) => {
                    ctx.commit('setCategories', response.data.categories)
                })
                .catch(error => console.log('Ошибка!', error));
        }
    }
}
