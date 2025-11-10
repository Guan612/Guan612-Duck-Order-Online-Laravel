import { Button } from 'antd';

export default function Home() {
    return (
        <div className="flex flex-col justify-center p-2">
            <h1 className="font-bold">欢迎来到我的新前端！</h1>
            <p>这是一个从零开始的 React 页面。</p>
            <p>你现在可以开始构建你的在线点餐系统了。</p>
            <Button type="primary">测试按钮</Button>
        </div>
    );
}
