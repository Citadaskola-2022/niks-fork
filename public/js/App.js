export default {
    template: `
    <div class="grid bg-gray-600">
     <h2>Sastāvdaļu Rediģēšana</h2>
       <label>Veids</label>
    <div>
        {{ selected }}
    </div>
        <p>
            <select v-model="form.type" multiple class="text-black">
                <option>GPU</option>
                <option>PSU</option>
                <option>CPU</option>
                <option>RAM</option>
                <option>Motherboard</option>
            </select>
        </p>
    <label>Modelis</label>
        <p>
            <input type="text" v-model="form.model" placeholder="text" class="text-black">
        </p>
    <label>Cena</label>
        <p>
            <input type="number" v-model.number="form.price" placeholder="number" class="text-black">
        </p>

    <button type="submit" class="bg-gray-400 hover:bg-gray-200 border rounded px-4 py-1">
        <p>
            <label class="text-black">Saglabāt</label>
        </p>
    </button>
        <div class="w-64">
            <p>Tips: {{form.type}}</p>
            <p>Modelis: {{form.model}}</p>
            <p>Cena: {{form.price}}</p>
        </div>
        <div class="divide-y">
            <div v-for="items in saved">
                <p>Tips: {{form.type}}</p>
                <p>Modelis: {{form.model}}</p>
                <p>Cena: {{form.price}}</p>
            </div>
        </div>
    {{form}}
    </div>
    `,
    data() {
        return {
            form: {
                type: '',
                model: '',
                price: ''
            }
        }
    },
    methods: {
        save(){
            const item = {
                type: this.form.type,
                model: this.form.model,
                price: this.form.price,
            }
            if (item.type === '' || item.model === '' || item.price === ''){
                return
            }
            {
                this.saved.unshift(item);
                type: this.form.type = '';
                model: this.form.model = '';
                price: this.form.price = ''
            }
        }
    }
}
