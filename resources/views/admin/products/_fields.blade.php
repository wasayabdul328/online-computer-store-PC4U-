                                            <div class="form-group {{$errors->has('product_name')? 'has-error' : ''}}">
                                            
                                                <label>Product Name:</label>
                                                <input type="text" class="form-control border-input" placeholder="Macbook pro" name="product_name" value="{{$product->product_name}}">
                                                <span class="text-danger"> {{$errors->has('product_name')? $errors->first('product_name') : ''}}</span>
                                            </div>
                                            <div class="form-group {{$errors->has('category')? 'has-error' : ''}}">
                                            
                                                <label>Select Product Category:</label>
                                                <select class="form-control border-input" placeholder="Select product Category" name="category" >
                                                    <option value="Graphic Card">Graphic Card</option>
                                                    <option value="Monitor">Monitors</option>
                                                    <option value="SSD">SSD</option>
                                                    <option value="HDD">HDD</option>
                                                    <option value="Ram">Ram</option>
                                                    <option value="Cpu">Cpu</option>
                                                </select>
                                                <span class="text-danger"> {{$errors->has('category')? $errors->first('category') : ''}}</span>
                                            </div>

                                            <div class="form-group {{$errors->has('price')? 'has-error' : ''}}">
                                                <label>Product Price:</label>
                                                <input type="text" class="form-control border-input" placeholder="$2500" name="price" value="{{$product->price}}">
                                                <span class="text-danger"> {{$errors->has('price')? $errors->first('price') : ''}}</span>
                                            </div>

                                            <div class="form-group {{$errors->has('description')? 'has-error' : ''}}">
                                                <label>Product Description:</label>
                                                {{Form::textarea('description',$product->description,['class'=>'form-control border-input','placeholder'=>'Enter Description of the product'])}}
                                                <span class="text-danger"> {{$errors->has('description')? $errors->first('description') : ''}}</span>
                                            </div>

                                            <div class="form-group {{$errors->has('image')? 'has-error' : ''}}">
                                                <label>Product Image:</label>
                                                <input name="image" type="file" class="form-control border-input" id="imagej" >
                                                <div id="thumb-output"></div>
                                                <span class="text-danger"> {{$errors->has('image')? $errors->first('image'): ''}}</span>
                                                
                                            </div>